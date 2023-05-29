<?php

namespace App\Exports;

use App\Models\MailFollow;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MailFollowExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MailFollow::where("archived", false)->orderBy("date", "asc")->get();
    }
    public function map($mail): array
    {
        return [
            $mail->source,
            $mail->sourceTarget,
            $mail->number,
            $mail->title,
            $mail->date,
            $mail->note,
        ];
    }
    public function headings(): array
    {
        return [
            'المصدر',
            'المصدر الفرعي',
            'الرقم',
            'العنوان',
            'تاريخ الاجال',
            'ملاحظات',
        ];
    }
}
