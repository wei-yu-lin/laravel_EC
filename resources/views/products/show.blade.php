<table>
<th>商品列表</th>
<tr>
	<td>名稱</td>
	<td>價錢</td>
	<td>數量</td>
	<td>備註</td>
</tr>
<tr>
	<td>{{ $product->name }}</td>
	<td>{{ $product->price }}</td>
	<td>{{ $product->stock }}</td>
	<td>{{ $product->memo }}</td>
</tr>
</table>