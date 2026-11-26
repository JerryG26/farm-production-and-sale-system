<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sale Item Management</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1>Sale Item Interface</h1>
    </header>

    <main>
      <section class="card">
        <h2>Sale Item Form</h2>
        <form action="#" method="post">
          <div class="form-grid">
            <div class="form-group">
              <label for="quantity_sold">quantity_sold</label>
              <input
                type="number"
                id="quantity_sold"
                name="quantity_sold"
                step="0.01"
                min="0.01"
                required
              >
            </div>

            <div class="form-group">
              <label for="unit_price">unit_price</label>
              <input
                type="number"
                id="unit_price"
                name="unit_price"
                step="0.01"
                min="0.00"
                required
              >
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Add Sale Item</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
          </div>
        </form>
      </section>
    </main>
  </div>
</body>
</html>
