<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics</title>
    <link rel="stylesheet" href="css/analytics.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#furniture"><i class="fas fa-couch"></i> Furniture</a></li>
            <li><a href="orders.php"><i class="fas fa-box"></i> Orders</a></li>
            <li><a href="profile.php"><i class="fas fa-user-cog"></i> Account Settings</a></li>
            <li><a href="analytics.php" class="active"><i class="fas fa-chart-line"></i> Analytics</a></li>
            <li><a href="#notifications"><i class="fas fa-bell"></i> Notifications</a></li>
        </ul>
    </div>

  
    <div class="main-content">
        <header>
            <h1>Analytics</h1>
            <div class="profile">
                <a href="profile.php" class="profile-btn">
                    <img src="img/pfp.jpg" alt="Profile" class="profile-img">
                    <span>Your Profile</span>
                </a>
                <button class="logout-btn">Log Out</button>
            </div>
        </header>

        <section class="charts">
            <h2>Performance Charts</h2>
            <div class="chart-container">
                <div class="chart">
                    <h3>Revenue Trend</h3>
                    <canvas id="revenueChart"></canvas>
                </div>
                <div class="chart">
                    <h3>User Growth</h3>
                    <canvas id="userGrowthChart"></canvas>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue ($)',
                    data: [1000, 2000, 1500, 3000, 2500, 4000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true
            }
        });

        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        new Chart(userGrowthCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'New Users',
                    data: [50, 75, 100, 125, 150, 200],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)'
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
