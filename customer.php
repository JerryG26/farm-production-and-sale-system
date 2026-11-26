<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Management</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1>Customer Interface</h1>
    </header>

    <main>
      <section class="card">
        <h2>Customer Form</h2>
        <form action="#" method="post">
          <div class="form-grid">
            <div class="form-group">
              <label for="customer_name">customer_name</label>
              <input
                type="text"
                id="customer_name"
                name="customer_name"
                maxlength="100"
                required
              >
            </div>

            <div class="form-group">
              <label for="contact_number">contact_number</label>
              <input
                type="tel"
                id="contact_number"
                name="contact_number"
                maxlength="30"
                required
              >
            </div>

            <div class="form-group">
              <label for="password">password</label>
              <input
                type="password"
                id="password"
                name="password"
                minlength="6"
                placeholder="Enter customer password"
                required
              >
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save Customer</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
          </div>
        </form>
      </section>
    </main>
  </div>
</body>
</html>
