## ABC Company Order Restfull Api

This project has builded with PHP Laravel 8 Framework.

<b><h3>Requirements</h3></b>
Docker<br>
docker-compose<br>
git<br>

<b><h3>Installation</h3></b>
<pre>git clone https://github.com/aeksioglu53/ABCRestApi.git</pre>
To build docker containers
<pre>./vendor/bin/sail up -d</pre>
To Create Tables
<pre>./vendor/bin/sail artisan migrate</pre>
To Generate Oauth2 clients
<pre>
./vendor/bin/sail artisan passport:install

//this command returns oauth2 client secret keys.
</pre>
To Insert Dummy Datas
<pre>
./vendor/bin/sail artisan db:seed
</pre>


<b><h3>Requests</h3></b>
base url : http://localhost/api/v1/
<table>
<thead>
<th>Request</th>
<th>Endpoint</th>
<th>Method</th>
<th>Body</th>
<th>Return</th>
</thead>
<tbody>
<tr>
<td>Create Order</td>
<td>/orders</td>
<td>POST</td>
<td>
<pre>
{
"code": "123457",
"product_id": 1,
"quantity": 3,
"address": "Test addres 1",
"shipping_date": "2021-12-25"
}
</pre>
</td>
<td>Order</td>
</tr>
<tr>
    <td>Get Orders</td>
    <td>/orders</td>
    <td>GET</td>
    <td></td>
    <td>OrderCollection</td>
</tr>
<tr>
    <td>Get Order From Id</td>
    <td>/orders/{orderId}</td>
    <td>GET</td>
    <td></td>
    <td>Order</td>
</tr>
<tr>
    <td>Update Order</td>
    <td>/orders/{orderId}</td>
    <td>PUT</td>
    <td>
<pre>
{
"code": "ABC125",
"product_id": 1,
"quantity": 1,
"address": "Test asdasd123123",
"shipping_date": "2021-12-31"
}
</pre>
     </td>
    <td>Order</td>
</tr>
</tbody>
</table>


<b><h3>Parameters</h3></b>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Accepted Values</th>
<th>Example</th>
</tr>
</thead>
<tbody>
<tr>
<td>code</td>
<td>string</td>
<td>6 characters</td>
<td>ABC456</td>
</tr>
<tr>
<td>product_id</td>
<td>int</td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>quantity</td>
<td>int</td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>address</td>
<td>string</td>
<td></td>
<td></td>
</tr>
<tr>
<td>shipping_date</td>
<td>date</td>
<td>Y-m-d</td>
<td>2021-12-21</td>
</tr>
</tbody>
</table>

<b><h3>Partial View Examples</h3></b>
<b>Order</b>
<pre>
{
  "id": 1,
  "code": "ABC125",
  "user_id": 1,
  "product_id": 1,
  "quantity": 1,
  "total": 39,
  "address": "Test asdasd123123",
  "shipping_date": "2021-12-31T00:00:00.000000Z",
  "created_at": "2021-12-21T14:29:58.000000Z",
  "updated_at": "2021-12-21T14:31:11.000000Z"
}
</pre>

<hr>
<p style="text-align: right">
<b>Abdulhamit Ekşi</b><br>
Software Engineer<br>
ahamiteksi053@gmail.com
<br>
</p>
