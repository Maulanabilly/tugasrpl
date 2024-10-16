@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Semester</th>
                <th>Pembayaran UKT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Billy</td>
                <td>1</td>
                <td>Lunas</td>
            </tr>
            <tr>
                <td>Zaky</td>
                <td>2</td>
                <td>Lunas</td>
            </tr>
            <tr>
                <td>Riznal</td>
                <td>3</td>
                <td>Lunas</td>
            </tr>
            <tr>
                <td>Hafis</td>
                <td>4</td>
                <td>Lunas</td>
            </tr>
            <tr>
                <td>Billy</td>
                <td>5</td>
                <td>Lunas</td>
            </tr>
        </tbody>
    </table>
@endsection
