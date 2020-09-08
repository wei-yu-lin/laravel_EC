<form action="{{ route('products.update', [ 'product' => $product]) }}" method="POST">
	@method('PUT')
	@CSRF
    <table>
        <tr>
        	<td>商品名稱：</td>
        	<td><input type="text" name="name" value="{{ $product->name }}"/></td>
        </tr>
        <tr>
        	<td>價錢</td>
        	<td><input type="text" name="price" value="{{ $product->price }}"/></td>
        </tr>
        <tr>
        	<td>數量</td>
        	<td><input type="text" name="stock" value="{{ $product->stock }}"/></td>
        </tr>
        <tr>
        	<td>備註</td>
        	<td><input type="text" name="memo" value="{{ $product->memo }}"/></td>
        </tr>
    	<tr>
    		<td colspan="2" align="right">
    			<input type="submit" value="修改">
    		</td>
    </table>
</form>
<form action="{{ route('products.destroy', [ 'product' => $product]) }}" method="POST">
    @method('DELETE')
    @csrf
    <input type="submit" value="刪除">
</form>