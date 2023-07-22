<!DOCTYPE html>
<html>
<head>
  <title>Quản lý danh sách sách</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h6>Sắp xếp danh sách theo:</h6>
        <form action="index.php" method="post">
          <div class="input-group mb-3">
            <select class="form-select" name="sortOption">
              <option value="author">Tên tác giả</option>
              <option value="title">Tên sách</option>
              <option value="publicationYear">Năm xuất bản</option>
            </select>
            <div class="input-group-append">
              <input type="submit" class="btn btn-primary" value="Sắp xếp">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-12">
        <h1>Danh sách các cuốn sách</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Tên sách</th>
              <th>Tên tác giả</th>
              <th>Nhà xuất bản</th>
              <th>Năm xuất bản</th>
              <th>Số hiệu ISBN</th>
              <th>Danh mục chương sách</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($books as $book) {
                echo "<tr>";
                echo "<td>".$book->title."</td>";
                echo "<td>".$book->author."</td>";
                echo "<td>".$book->publisher."</td>";
                echo "<td>".$book->publicationYear."</td>";
                echo "<td>".$book->isbn."</td>";
                echo "<td>".implode(', ', $book->getChapters())."</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <h2>Thêm sách mới</h2>
        <form action="index.php" method="post">
          <div class="mb-3">
            <label for="title" class="form-label">Tên sách:</label>
            <input type="text" name="title" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="author" class="form-label">Tên tác giả:</label>
            <input type="text" name="author" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="publisher" class="form-label">Nhà xuất bản:</label>
            <input type="text" name="publisher" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="publicationYear" class="form-label">Năm xuất bản:</label>
            <input type="text" name="publicationYear" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="isbn" class="form-label">Số hiệu ISBN:</label>
            <input type="text" name="isbn" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="chapters" class="form-label">Danh mục chương sách (cách nhau bằng dấu phẩy):</label>
            <input type="text" name="chapters" class="form-control" required>
          </div>
          <button type="submit" name="addBook" class="btn btn-primary">Thêm sách</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
