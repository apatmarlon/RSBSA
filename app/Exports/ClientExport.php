<?php

namespace App\Exports;

use App\student_tbl;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ClientExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.report', [ 'address' => $address, 'addressb' => $addressb])->withDetails( $clientbrgy,$clientmun )->withQuery ( $barangay,$municipality );
    }
}
