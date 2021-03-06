<section class="closed-container">

  <?php
    echo anchor("order/delete_all", 'Delete all orders',
                  "onClick='return confirm(".
                    '"DANGER: You are about to cancel all orders!"'.
                  ");'")
  ?>
  <br>

  <h2 class="container-header">Orders Table</h2>
  <div>Please click on Show to see more details for that order.</div>

  <table class="table">
    <thead>
      <tr>
        <th>transaction id</th>
        <th>customer handle</th>
        <th>time of transaction</th>
        <th>total</th>
      </tr>
    </thead>
  <?php
    foreach ($orders as $order) {
      echo "<tr>";
      echo "<td>" . $order->id . "</td>";
      echo "<td>" . $this->MUser->find($order->customer_id)->login . "</td>";
      echo "<td>" . $order->order_date . ' ' . $order->order_time . "</td>";
      echo "<td>$" . $order->total . "</td>";

      echo "<td>" . anchor("order/show/$order->id", 'Show') . "</td>";
      echo "<td>" . anchor("order/delete/$order->id", 'Delete',
                            "onClick='return confirm(".
                              '"Do you really want to delete this record?"'.
                            ");'"
                          ) . "</td>";
      echo "</tr>";
    }
  ?>
  </table>
</section><!-- ./closed-container -->
