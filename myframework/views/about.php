<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">
    <div class="starter-template">
        <h1>Fruit Database Example</h1>
        <p><a href="/about/showAddForm">Add New</a></p>

        <?

        foreach($data as $fruit){

            echo $fruit["name"]."<a href='/about/edit/?id=".$fruit["id"]."'> Edit </a><a href='/about/delete/?id=".$fruit["id"]."'> Delete </a><br>";
        }



        ?>

    </div>
</div>