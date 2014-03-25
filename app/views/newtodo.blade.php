@extends('layouts.master')

@section('content')

	 <div class="mid">    
        <h1>TODO list:</h1>
          <ul class='padbot'>  
            <?if(isset($list)) : ?>
              <?  while ($row = $list->fetch_assoc()) : ?>
                  <li><?= $row['item']; ?> | <a href="<?= $row['id']; ?>" class="removeItem">Remove</a></li>
              <? endwhile; ?>
            <? else : ?>
              <h3><?= "You have nothing to do? Find something :";?></h3>
              <p><?= "<a href='http://google.com'>GOOGLE</a>";?></p>
            <? endif; ?>
          </ul>
        <h2>Add items to list</h2>
          <? if (!empty($error)) : ?>
            <hr><strong><?= $error; ?></strong><hr>
          <? endif; ?>
        <form method="POST" action="">
            <p class='margleft padtop'>
              <label for="additem">Item to add:</label>
              <input id="additem" name="additem" type="text" placeholder="Enter new TODO item">
              <input type="submit" value="Add">
            </p>
        </form>
    </div>   

@stop