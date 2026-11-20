
<html>
<head>
    <title>Product Details</title>
</head>
<body>

    <h1>Product Calculator</h1>

    <form action="{{ url('/product') }}" method="POST">
        @csrf

        Product Name:
        <input type="text" name="name" required>
        <br><br>

        Product Price:
        <input type="number" name="price" required>
        <br><br>

        Quantity:
        <input type="number" name="quantity" required>
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    @isset($total)
        <h2>Product Details</h2>
        <p>Name: {{ $name }}</p>
        <p>Price: {{ $price }}</p>
        <p>Quantity: {{ $quantity }}</p>
        <h3>Total Amount: {{ $total }}</h3>
    @endisset

</body>
</html>
