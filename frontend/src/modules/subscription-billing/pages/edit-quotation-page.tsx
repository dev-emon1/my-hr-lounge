import { useParams } from "react-router-dom";

import QuotationForm from "../components/quotations/quotation-form";

function EditQuotationPage() {
  const { quotationId } = useParams();

  console.log(quotationId);

  return <QuotationForm mode="edit" quotationId={quotationId} />;
}

export default EditQuotationPage;
