<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MedSystem</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="dashboard">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">🏥 MedSystem</div>
            </div>

            <ul class="sidebar-menu">
                <li><a href="dashboard.php" class="active">📊 Visão Geral</a></li>
                <li><a href="patients.php">👥 Pacientes</a></li>
                <li><a href="new-patient.php">➕ Novo Paciente</a></li>
                <li><a href="appointments.php">📅 Consultas</a></li>
                <li><a href="exams.php">🔬 Exames</a></li>
                <li><a href="prescriptions.php">💊 Receitas</a></li>
                <li><a href="reports.php">📋 Relatórios</a></li>
                <li><a href="./index.php">🚪 Sair</a></li>
            </ul>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="header">
                <h1 class="page-title">Visão Geral</h1>
                <div class="user-info">
                    <div class="user-avatar">DR</div>
                    <span>Dr. João Silva</span>
                </div>
            </div>

            <div class="content-area">
                <!-- STATISTICS CARDS -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">127</div>
                        <div class="stat-label">Pacientes Ativos</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">23</div>
                        <div class="stat-label">Consultas Hoje</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">8</div>
                        <div class="stat-label">Exames Pendentes</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">15</div>
                        <div class="stat-label">Receitas Emitidas</div>
                    </div>
                </div>

                <!-- TODAY'S APPOINTMENTS -->
                <h3>Consultas de Hoje</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Horário</th>
                            <th>Paciente</th>
                            <th>Tipo</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>09:00</td>
                            <td>Maria Santos</td>
                            <td>Consulta</td>
                            <td><span class="status-badge status-active">Confirmada</span></td>
                            <td><button class="btn-small btn-primary" onclick="redirectToAppointments()">Ver</button></td>
                        </tr>
                        <tr>
                            <td>10:30</td>
                            <td>José Oliveira</td>
                            <td>Retorno</td>
                            <td><span class="status-badge status-pending">Aguardando</span></td>
                            <td><button class="btn-small btn-primary" onclick="viewAppointment(2)">Ver</button></td>
                        </tr>
                        <tr>
                            <td>14:00</td>
                            <td>Ana Costa</td>
                            <td>Consulta</td>
                            <td><span class="status-badge status-cancelled">Cancelada</span></td>
                            <td><button class="btn-small btn-primary" onclick="viewAppointment(3)">Ver</button></td>
                        </tr>
                        <tr>
                            <td>15:30</td>
                            <td>Carlos Silva</td>
                            <td>Exame</td>
                            <td><span class="status-badge status-completed">Concluída</span></td>
                            <td><button class="btn-small btn-primary" onclick="viewAppointment(4)">Ver</button></td>
                        </tr>
                    </tbody>
                </table>

                <!-- RECENT ACTIVITY -->
                <h3 style="margin-top: 30px;">Atividades Recentes</h3>
                <div class="history-timeline">
                    <div class="history-item">
                        <div class="history-date">Hoje, 14:30</div>
                        <div class="history-title">Receita Emitida</div>
                        <p>Receita de Losartana 50mg para Maria Santos Silva</p>
                    </div>
                    <div class="history-item">
                        <div class="history-date">Hoje, 13:45</div>
                        <div class="history-title">Exame Solicitado</div>
                        <p>Hemograma completo para José Oliveira Costa</p>
                    </div>
                    <div class="history-item">
                        <div class="history-date">Hoje, 11:20</div>
                        <div class="history-title">Novo Paciente Cadastrado</div>
                        <p>Ana Costa Pereira foi adicionada ao sistema</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // CORREÇÃO: Mudar de 'appointments.html' para 'appointments.php'
        function redirectToAppointments() {
            window.location.href = 'appointments.php';
        }

        // Função para visualizar consulta específica
        function viewAppointment(id) {
            // Redireciona para a página de consultas
            window.location.href = 'appointments.php';
        }

        // Função para visualizar paciente
        function viewPatient(id) {
            window.location.href = 'patients.php';
        }

        // Função para emitir receita
        function createPrescription(id) {
            window.location.href = 'prescriptions.php';
        }

        // Destacar menu ativo baseado na página atual
        document.addEventListener('DOMContentLoaded', function() {
            var currentPage = window.location.pathname.split('/').pop();
            document.querySelectorAll('.sidebar-menu a').forEach(function(link) {
                var href = link.getAttribute('href');
                if (href === currentPage || (currentPage === '' && href === 'dashboard.php')) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>