@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile Settings /</span> Profile</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <hr class="my-0" />
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.update') }}">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Nama</label>
                                <input class="form-control" type="text" id="name" value="{{ $user->name }}" name="name"
                                    autofocus required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" value="{{ $user->email }}" name="email"
                                    id="email" required />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
</div>


@endsection