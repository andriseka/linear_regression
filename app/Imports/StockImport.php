<?php

namespace App\Imports;

use App\Models\Stock;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StockImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row['open'] == 'null') {
            $row['open'] = 0;
        }
        if ($row['high'] == 'null') {
            $row['high'] = 0;
        }
        if ($row['low'] == 'null') {
            $row['low'] = 0;
        }
        if ($row['close'] == 'null') {
            $row['close'] = 0;
        }
        if ($row['adj_close'] == 'null') {
            $row['adj_close'] = 0;
        }
        if ($row['volume'] == 'null') {
            $row['volume'] = 0;
        }

        return new Stock([
            'date' => $row['date'],
            'open' => $row['open'],
            'high' => $row['high'],
            'low' => $row['low'],
            'close' => $row['close'],
            'adj_close' => $row['adj_close'],
            'volume' => $row['volume']
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
