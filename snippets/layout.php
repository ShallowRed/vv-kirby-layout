<div class="k-layout w-full">
  <?php foreach ($layouts as $layout) : ?>
  <section
    <?php
    echo attr([
      'class' => A::join([
        'k-row',
        $layout->class()
      ], ' '),
    ]);
    ?>>
    <?php foreach ($layout->columns() as $column) : ?>
    <div
      <?php
      echo attr([
        'class' => A::join([
          'k-column col-span-6',
          ('md:col-span-' . $column->span(6)),
        ], ' '),
      ]);
      ?>>
      <?php foreach ($column->blocks() as $block) : ?>
        <div
        <?php
        echo attr([
          'class' => A::join([
            'k-block',
            $block->class()
          ], ' '),
        ]);
        ?>>
        <?php echo $block;?>
        </div>
      <?php endforeach;?>
    </div>
    <?php endforeach;?>
  </section>
  <?php endforeach;?>
</div>
