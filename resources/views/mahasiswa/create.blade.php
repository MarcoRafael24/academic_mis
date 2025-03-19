@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        </div>
    </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                 <div class ="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-header">
                                 <div class="d-flex align-items-center">
                                     <h4 class="card-title">Add Row</h4>
                                     <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                                         <i class="fa fa-plus"></i> Add Row
                                     </button>
                                 </div>
                             </div>
                             <div class="card-body">
                                <div class="row">
                                    <form method="POST" action="{{route('mahasiswaStore')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nik">NRP</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="nrp"
                                                id="nrp"
                                                placeholder="e.g.2372010"
                                                required autofocus maxlength="7"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                id="name"
                                                placeholder="e.g.John Doe"
                                                required
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="birth_date">Birth Date</label>
                                            <input
                                                type="date"
                                                class="form-control"
                                                name="birth_date"
                                                id="birth_date"
                                                placeholder="e.g.John Doe"
                                                required
                                            />
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                id="email"
                                                placeholder="e.g.johndoe@gmail.com"
                                            />
                                        </div>
                                            <div class="form-group">
                                                <label for="name">Address</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="address"
                                                    id="address"
                                                    placeholder="e.g.jl.Babakan Jeruk"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Phone</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="phone"
                                                    id="phone"
                                                    placeholder="e.g.0823517520"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="dosenWali">Dosen Wali</label>
                                                <select class="form-control" name="dosen_nik">
                                                    @foreach($dosens as $dosen)
                                                        <option value="{{$dosen->nik}}">{{$dosen->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <div class="card-action">
                                            <input type="submit" class="btn btn-success" value="Submit" >
                                            <input type="submit" class="btn btn-danger" value="Cancel">

                                        </div>
                                    </form>
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ExtraCss')
@endsection

@section('ExtraJS')
@endsection
