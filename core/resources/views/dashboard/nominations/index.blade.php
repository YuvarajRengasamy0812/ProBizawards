@extends('dashboard.layouts.master')

@section('title', 'Nominations')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h2>ProBiz Awards 2026 Nominations</h2>
                <small>Latest nomination submissions</small>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t">
                    <thead>
                    <tr>
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Country</th>
                        <th>Submitted</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($nominations as $nomination)
                        <tr>
                            <td>{{ $nomination->company }}</td>
                            <td>{{ $nomination->contact }}<br><small>{{ $nomination->jobtitle }}</small></td>
                            <td>{{ $nomination->email }}</td>
                            <td>{{ $nomination->phone }}</td>
                            <td>{{ $nomination->category }}</td>
                            <td>{{ $nomination->subcategory }}</td>
                            <td>{{ $nomination->country }}</td>
                            <td>{{ optional($nomination->created_at)->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <strong>Statement:</strong> {{ $nomination->statement }}<br>
                                <strong>Description:</strong> {{ $nomination->description }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No nominations yet.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            @if($nominations->hasPages())
                <div class="box-footer text-center">
                    {{ $nominations->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
