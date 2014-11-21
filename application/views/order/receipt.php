<p>Items purchased</p>
======================
<br />
<p>Customer Name:
<?php print_r($this->MUser->find($order->customer_id)->first); ?>
,
<?php print_r($this->MUser->find($order->customer_id)->last); ?>
<br />
======================
<table class="table">
  <thead>
    <tr>
      <th>item name</th>
      <th>description</th>
      <th># purchased</th>
    </tr>
  </thead>
<?php
  $order_items = $this->Order_Item->find_all_from_order($order->id);
  foreach ($order_items as $order_item) {
    $item = $this->product_model->get($order_item->product_id);
    echo "<tr>";
    echo "<td>" . $item->name . "</td>";
    echo "<td>" . $item->description . "</td>";
    echo "<td>" . $order_item->quantity . "</td>";
    echo "</tr>";
  }
?>
</table>