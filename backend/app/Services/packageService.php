<?php

namespace App\Services;

use App\Models\Central\Package;
use App\Repositories\Contracts\PackageRepositoryInterface;
use Illuminate\Support\Str;

class PackageService
{
    public function __construct(
        protected PackageRepositoryInterface $repository
    ) {}

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function create(array $data): Package
    {
        $data['slug'] = Str::slug($data['name']);

        return $this->repository->create($data);
    }

    public function update(Package $package, array $data): Package
    {
        $data['slug'] = $data['slug']
            ?? Str::slug($data['name']);

        return $this->repository->update($package, $data);
    }

    public function delete(Package $package): bool
    {
        if ($package->tenants()->exists()) {
            throw new \Exception(
                'Package is assigned to active tenants.'
            );
        }

        return $this->repository->delete($package);
    }
}
