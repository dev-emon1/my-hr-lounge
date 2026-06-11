import { useParams } from "react-router-dom";

import QuotationForm from "../components/quotations/quotation-form";

import { mockQuotations } from "../constants/mock-quotations";

function QuotationEditPage() {
  const { quotationId } = useParams();

  const quotation = mockQuotations.find(
    (item) => item.quotationNumber === quotationId,
  );

  return (
    <QuotationForm
      mode="edit"
      quotationId={quotationId}
      initialData={quotation}
    />
  );
}

export default QuotationEditPage;
