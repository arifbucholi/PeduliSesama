@foreach ($campaigns as $campaign )
<tr>
    <td> 1 </td>
    <td>Nama</td>
    <td>{{ $campaign->title }}</td>
    <td>{{ $campaign->start_date }}</td>
    <td>{{ $campaign->status }}</td>
    <td></td>
</tr>
@endforeach
