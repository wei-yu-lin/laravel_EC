<form action="{{ route('products.store') }}" method="POST">
	@CSRF <!-- 避免CSRF攻擊 -->
    <table>
        <tr>
        	<td>商品名稱：</td>
        	<td><input type="text" name="name" /></td>
        </tr>
        <tr>
        	<td>價錢</td>
        	<td><input type="text" name="price" /></td>
        </tr>
        <tr>
        	<td>數量</td>
        	<td><input type="text" name="stock" /></td>
        </tr>
        <tr>
        	<td>備註</td>
        	<td><input type="text" name="memo" /></td>
        </tr>
    	<tr>
    		<td colspan="2" align="right">
    			<input type="submit" value="新增">
    		</td>
    </table>
</form>