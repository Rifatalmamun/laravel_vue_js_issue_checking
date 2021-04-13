<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('media/jj.png')}}" class="logo" alt="JakJamok">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
