<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<form>
    <label class="form-label" for="value1">Value1:</label>
    <input class="form-input" type="number" step="any" name="value1" id="value1">

    <label class="form-label" for="operation">operation:</label>
    <select name="operation" id="operation" >
        <option >add</option>
        <option>subtract</option>
        <option>multiply</option>
        <option>divide</option>
    </select>

    <label class="form-label" for="value2">Value2:</label>
    <input class="form-input" type="number" step="any" name="value2" id="value2">
    <hr />
    <input type="submit" value="calculate">

    <div class="form-result" id="result">

    </div>
</form>

<script src="js/script.js"></script>
</body>
</html>