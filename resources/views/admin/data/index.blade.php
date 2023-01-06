@extends('admin.layout.general')
@section('title', 'IMPLEMENTASI ALGORITMA LINEAR REGRESSION')

@section('content')

<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Data Saham</h1>
                <div class="">
                    @if (count($stocks) == 0)
                        <a href="" class="btn btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#modal-import">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                <polyline points="9 15 12 12 15 15"></polyline>
                                <line x1="12" y1="12" x2="12" y2="21"></line>
                            </svg>
                        </a>
                        <div class="modal modal-blur fade" id="modal-import" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Import Data Saham</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('import.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Upload File</label>
                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Import</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <form action="{{route('import.destroy')}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <th class="rounded-start" style="width: 5%">
                                <div class="form-control">
                                    No
                                </div>
                            </th>
                            <th>
                                <div class="form-control">
                                    Tanggal
                                </div>
                            </th>
                            <th>
                                <div class="form-control">
                                    Open
                                </div>
                            </th>
                            <th>
                                <div class="form-control">
                                    High
                                </div>
                            </th>
                            <th>
                                <div class="form-control">
                                    Low
                                </div>
                            </th>
                            <th>
                                <div class="form-control">
                                    Close
                                </div>
                            </th>
                            <th>
                                <div class="form-control">
                                    Adj.Close
                                </div>
                            </th>
                            <th class="rounded-end">
                                <div class="form-control">
                                    Volume
                                </div>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($stocks as $stock => $result)
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">
                                            {{$stock + $stocks->firstitem()}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{date('d, F Y', strtotime($result->date))}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{$result->open}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{$result->high}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{$result->low}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{$result->close}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{$result->adj_close}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">
                                            {{$result->volume}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{$stocks->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
