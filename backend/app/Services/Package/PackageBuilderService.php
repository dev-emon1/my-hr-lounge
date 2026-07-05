<?php

namespace App\Services\Package;

use App\Actions\Package\CreatePackageAction;
use App\Actions\Package\NormalizePackageDataAction;
use App\Actions\Package\UpdatePackageAction;
use App\Actions\Package\ValidatePackageModulesAction;
use App\DTOs\Package\PackageBuilderData;
use App\Models\Central\Package;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PackageBuilderService
{
    public function __construct(

        /*
        |--------------------------------------------------------------------------
        | Actions
        |--------------------------------------------------------------------------
        */

        protected NormalizePackageDataAction $normalize,

        protected ValidatePackageModulesAction $validator,

        protected CreatePackageAction $create,

        protected UpdatePackageAction $update,

        /*
        |--------------------------------------------------------------------------
        | Services
        |--------------------------------------------------------------------------
        */

        protected PackageSnapshotService $snapshot,

    ) {}

    /*
    |--------------------------------------------------------------------------
    | Create Package
    |--------------------------------------------------------------------------
    */

 public function create(
    PackageBuilderData $dto
): Package {

    return DB::transaction(function () use ($dto) {

        /*
        |--------------------------------------------------------------------------
        | Build Payload
        |--------------------------------------------------------------------------
        */

        $payload = $this->buildPayload(
            $dto
        );

        /*
        |--------------------------------------------------------------------------
        | Persist Package
        |--------------------------------------------------------------------------
        */

        $package = $this->create->execute(
            $payload
        );

        /*
        |--------------------------------------------------------------------------
        | Clear Cache
        |--------------------------------------------------------------------------
        */

        $this->clearCache();

        return $package;
    });
}

    /*
    |--------------------------------------------------------------------------
    | Update Package
    |--------------------------------------------------------------------------
    */

public function update(
    Package $package,
    PackageBuilderData $dto
): Package {

    return DB::transaction(function () use (
        $package,
        $dto
    ) {

        /*
        |--------------------------------------------------------------------------
        | Build Payload
        |--------------------------------------------------------------------------
        */

        $payload = $this->buildPayload(
            $dto
        );

        /*
        |--------------------------------------------------------------------------
        | Update Package
        |--------------------------------------------------------------------------
        */

        $package = $this->update->execute(

            package: $package,

            attributes: $payload,

        );

        /*
        |--------------------------------------------------------------------------
        | Clear Cache
        |--------------------------------------------------------------------------
        */

        $this->clearCache();

        return $package;
    });
}

    /*
    |--------------------------------------------------------------------------
    | Preview Package
    |--------------------------------------------------------------------------
    |
    | Validate payload and generate registry snapshot
    | without persisting anything into database.
    |
    */

  public function preview(
    PackageBuilderData $dto
): array {

    /*
    |--------------------------------------------------------------------------
    | Build Payload
    |--------------------------------------------------------------------------
    */

    $payload = $this->buildPayload(
        $dto
    );

    return [

        'package' => $payload,

        'snapshot' => $payload['registry_snapshot'],

    ];
}

   /*
|--------------------------------------------------------------------------
| Build Package Payload
|--------------------------------------------------------------------------
|
| Shared pipeline for Create, Update and Preview.
|
*/

protected function buildPayload(
    PackageBuilderData $dto
): array {

    /*
    |--------------------------------------------------------------------------
    | Normalize Payload
    |--------------------------------------------------------------------------
    */

    $payload = $this->normalize->execute(
        $dto
    );

    /*
    |--------------------------------------------------------------------------
    | Validate Registry
    |--------------------------------------------------------------------------
    */

    $this->validator->execute(
        $payload['modules']
    );

    /*
    |--------------------------------------------------------------------------
    | Generate Registry Snapshot
    |--------------------------------------------------------------------------
    */

    $payload['registry_snapshot'] =
        $this->snapshot->build(
            $payload['modules']
        );

    return $payload;
}

    /*
    |--------------------------------------------------------------------------
    | Clear Package Cache
    |--------------------------------------------------------------------------
    */

    protected function clearCache(): void
    {
        Cache::flush();

        /*
        |--------------------------------------------------------------------------
        | Future
        |--------------------------------------------------------------------------
        |
        | Cache::tags(['packages'])->flush();
        |
        */
    }
}