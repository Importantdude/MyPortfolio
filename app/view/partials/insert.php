<?php
include "Pages/Block/Head.php";
?>




<div class="main">
    <p>
        <label>Name:</label>
        <input type="text" name="Name">
    </p>
    <p>
        <label>Price:</label>
        <input type="text" name="Price">
    </p>
    <p>
        <label>SKU:</label>
        <input type="text" name="SKU">
    </p>

    <select name="TO" id="itemType">
        <option>Type Switcher</option>
        <option value="DVD">DVD-disc</option>
        <option value="Book">Book</option>
        <option value="Furniture">Furniture</option>
    </select>

    <div id="typeDVD" class="itemType"><br>
        Size: <input type="text" name="DVD">
        <b>Please provide size of DVD-disk in MB</b>
    </div>

    <div id="typeBook" class="itemType"><br>
        Weight: <input type="text" name="Book">
        <b>Please provide weight of Book in KG</b>
    </div>

    <div id="typeFurniture" class="itemType"><br>
        <p>Height:
            <input type="text" name="Value1"></p>
        <p>Width :
            <input type="text" name="Value2"></p>
        <p>Length:
            <input type="text" name="Value3"></p>
        <p><b>Please provide dimensions in HxWxL format</b>
        <p>
    </div>
</div>
    <div class="button">
        <input type="submit" name="submit" value="Save" class="button">
    </div>
</div>
<?php
if ($error != '') {
    echo $error;
}
?>