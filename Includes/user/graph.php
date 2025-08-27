
        <?php
include('../config.php'); // your DB connection

// Fetch vote tally for President
$sql = "SELECT candidates.full_name, COUNT(votes.id) AS total_votes
        FROM candidates 
        LEFT JOIN votes ON candidates.id = votes.candidate_id 
        WHERE candidates.position_id = 'President'
        GROUP BY candidates.id";

$result = $conn->query($sql);

$labels = [];
$data = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['name'];
    $data[] = $row['total_votes'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Votes Tally - President</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="card shadow border-0 mb-7">
    <div class="card-header">
      <h4>Votes Tally - President</h4>
    </div>
    <div class="card-body">
      <canvas id="votesChart"></canvas>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('votesChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
          label: 'Votes',
          data: <?php echo json_encode($data); ?>,
          backgroundColor: ['#050a0fff', '#28a745', '#ffc107', '#dc3545'] // colors for bars
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>
</body>
</html>
