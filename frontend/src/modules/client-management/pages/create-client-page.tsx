import CreateClientHeader from "../components/create-client/create-client-header";

import CreateClientForm from "../components/create-client/create-client-form";

function CreateClientPage() {
  return (
    <div className="space-y-8">
      <CreateClientHeader />

      <CreateClientForm />
    </div>
  );
}

export default CreateClientPage;
