<?php
declare(strict_types=1);

namespace FastBillSdk\Invoice;

use FastBillSdk\Common\AbstractSearchStruct;

class InvoiceSearchStruct extends AbstractSearchStruct
{
    public function setInvoiceIdFilter(int $invoiceId)
    {
        $this->filters['INVOICE_ID'] = $invoiceId;
    }

    public function setInvoiceNumberFilter(string $invoiceNumber)
    {
        $this->filters['INVOICE_NUMBER'] = $invoiceNumber;
    }

    public function setInvoiceTitleFilter(string $invoiceTitle)
    {
        $this->filters['INVOICE_TITLE'] = $invoiceTitle;
    }

    public function setCustomerIdFilter(int $customerId)
    {
        $this->filters['CUSTOMER_ID'] = $customerId;
    }

    /**
     * @Deprecated
     */
    public function setMonthFilter(string $month)
    {
        $this->filters['MONTH'] = $month;
    }

    /**
     * @Deprecated
     */
    public function setYearFilter(string $year)
    {
        $this->filters['YEAR'] = $year;
    }

    public function setStartDueDate(string $startDueDate)
    {
        $this->filters['START_DUE_DATE'] = $startDueDate;
    }

    public function setEndDueDateFilter(string $endDueDate)
    {
        $this->filters['END_DUE_DATE'] = $endDueDate;
    }

    public function setStartPaidDateFilter(string $startPaidDate)
    {
        $this->filters['START_PAID_DATE'] = $startPaidDate;
    }

    public function setEndPaidDateFilter(string $endPaidDate)
    {
        $this->filters['END_PAID_DATE'] = $endPaidDate;
    }

    public function setStartDate(string $startDate)
    {
        $this->filters['START_DATE'] = $startDate;
    }

    public function setEndDateFilter(string $endDate)
    {
        $this->filters['END_DATE'] = $endDate;
    }

    public function setTypeFilter(string $type)
    {
        $this->filters['TYPE'] = $type;
    }
}
