<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sale Management</title>
  <link rel="stylesheet" href="css/customer_&_sales_styles.css">
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1>Sale Interface</h1>
    </header>

    <main>
      <section class="card">
        <h2>Sale Form</h2>
        <form action="#" method="post">
          <div class="form-grid">
            <div class="form-group">
              <label for="sale_date">sale_date</label>
              <input
                type="date"
                id="sale_date"
                name="sale_date"
                required
              >
            </div>

            <div class="form-group full-width">
              <label for="notes">notes</label>
              <textarea
                id="notes"
                name="notes"
                rows="3"
                placeholder="Optional delivery or payment notes"
              ></textarea>
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save Sale</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
          </div>
        </form>
      </section>
    </main>
  </div>
</body>
</html>
