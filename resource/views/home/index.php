<?php
section('content');
?>
<h1>Hello World</h1>
<h2><?php echo $name; ?> is <?php echo $age; ?> old</h2>
<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ratione accusamus earum pariatur facere consequatur iusto dolor, non, laudantium nihil nam quas eos! Minus omnis velit dolore id nostrum temporibus!
</p>
<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, vel, beatae a tempora laudantium consequuntur temporibus cupiditate soluta nihil, inventore vitae dignissimos. Rem qui a laboriosam voluptatibus dicta at et?
</p>
<?php
endsection();
extend('layout/app', 'content');
