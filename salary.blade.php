
<html>
<head>
    <title>Salary Calculator</title>
</head>
<body>
    <h1>Salary Calculator</h1>

    <form action="{{ url('/salary') }}" method="POST">
        @csrf

        <label>Enter Basic Salary:</label>
        <input type="number" name="basic" step="any" required>
        <br><br>

        <label>Enter Allowance:</label>
        <input type="number" name="allowance" step="any" required>
        <br><br>

        <label>Enter Deduction:</label>
        <input type="number" name="deduction" step="any" required>
        <br><br>

        <button type="submit">Calculate Salary</button>
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    @isset($salary)
        <h2>Net Salary = {{ $salary }}</h2>
    @endisset
</body>
</html>
