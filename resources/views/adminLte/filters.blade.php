<div>
    <form action="">
      @if($category_check=="")
        <select name="category" id="category">
          <option value="all">all categories</option>
          <option value="shirts">T-shirts</option>
          <option value="hoodies">Sweatshirts</option>
          <option value="trousers">Pants</option>
          <option value="sneakers">Shoes</option>
          <option value="accessories">Accessories</option>
        </select>
      @endif
      <select id="color" name="color">
        <option value="all">all colors</option>
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="black">black</option>
        <option value="grey">grey</option>
        <option value="white">white</option>
        <option value="green">green</option>
        <option value="orange">orange</option>
        <option value="pink">pink</option>
        <option value="gold">gold</option>
      </select>
      <select id="size" name="size">
        @if($shoes_check == "")      
          <option value="all">all sizes</option>
          <option value="s">S</option>
          <option value="m">M</option>
          <option value="l">L</option>  
        @else
          <option value="all">all sizes</option>
        @endif     
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
      </select>
      
      @if($brand_check=="")
        <select id="brand" name="brand">
          <option value="all">all brands</option>
          <option value="nike">NIKE</option>
          <option value="adidas">ADIDAS</option>
          <option value="champion">Champion</option>
          <option value="armani">Armani</option>
          <option value="vans">Vans</option>
          <option value="converse">Converse</option>
          <option value="kappa">Kappa</option>
          <option value="tommy">Tommy Hilfiger</option>
          <option value="timberland">Timberland</option>
          <option value="puma">Puma</option>
        </select>
      @endif
      <select id="material" name="material">
        <option value="all">all materials</option>
        <option value="cotton">Cotton</option>
        <option value="leather">Leather</option>
        <option value="denim">Denim</option>
        <option value="polyester">Polyester</option>
      </select>
      <label for="fname">Min price:</label>
      <input type="number" id="min" name="min">
      <label for="fname">Max price:</label>
      <input type="number" id="max" name="max">
                   
      <button type="submit">Filter!</button>
      <button type="button" onclick="(function(){window.location = window.location.href.split('?')[0];})()">Refresh!</button> 
    </form>
    <script type="text/javascript">
      document.getElementById('category').value = "<?php echo $_GET['category'] ?? 'all';?>";
      document.getElementById('color').value = "<?php echo $_GET['color'] ?? 'all';?>";
      document.getElementById('size').value = "<?php echo $_GET['size'] ?? 'all';?>";     
      document.getElementById('material').value = "<?php echo $_GET['material'] ?? 'all';?>";
      document.getElementById('min').value = "<?php echo $_GET['min'] ?? null;?>";
      document.getElementById('max').value = "<?php echo $_GET['max'] ?? null;?>";
      document.getElementById('brand').value = "<?php echo $_GET['brand'] ?? 'all';?>";
    </script>
  </div>