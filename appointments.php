<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas - Sistema Médico</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">MedSystem</div>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php">📊 Visão Geral</a></li>
                <li><a href="patients.php">👥 Pacientes</a></li>
                <li><a href="new-patient.php">➕ Novo Paciente</a></li>
                <li><a href="appointments.php" class="active">📅 Consultas</a></li>
                <li><a href="exams.php">🔬 Exames</a></li>
                <li><a href="prescriptions.php">💊 Receitas</a></li>
                <li><a href="reports.php">📋 Relatórios</a></li>
                <li><a href="./index.php">🚪 Sair</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1 class="page-title">Consultas</h1>
                <div class="user-info">
                    <span>Dr. João Silva</span>
                    <div class="user-avatar">JS</div>
                </div>
            </header>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Consultas Hoje</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Esta Semana</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Pendentes</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Este Mês</div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="content-area">
                <!-- Action Buttons -->
                <div style="display: flex; gap: 15px; margin-bottom: 30px; align-items: center; flex-wrap: wrap;">
                    <button class="btn" onclick="openNewAppointmentModal()">
                        ➕ Nova Consulta
                    </button>
                    <button class="btn btn-secondary" onclick="showCalendarView()">
                        📅 Visualizar Calendário
                    </button>
                    <button class="btn btn-secondary" onclick="showListView()" id="showListBtn" style="display: none;">
                        📋 Voltar para Lista
                    </button>
                    <input type="date" id="filterDate" class="form-control" style="width: auto; margin-left: auto;">
                    <select id="filterStatus" style="width: auto;">
                        <option value="">Todos os Status</option>
                        <option value="agendada">Agendada</option>
                        <option value="confirmada">Confirmada</option>
                        <option value="em_andamento">Em Andamento</option>
                        <option value="concluida">Concluída</option>
                        <option value="cancelada">Cancelada</option>
                    </select>
                </div>

                <!-- Appointments List -->
                <div id="appointmentsList">
                    <!-- Today's Appointments -->
                    <h3
                        style="color: #2c3e50; margin-bottom: 20px; border-left: 4px solid #3498db; padding-left: 15px;">
                        📅 Hoje - 30 de Junho, 2025
                    </h3>

                    <div class="patient-card">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <div class="patient-name">Maria Santos Silva</div>
                                <div class="patient-info">
                                    ⏰ 08:00 - 08:30 | 📱 (11) 99999-1234<br>
                                    📋 Consulta de rotina | 🆔 Paciente #001
                                </div>
                            </div>
                            <span class="status-badge status-confirmada">Confirmada</span>
                        </div>
                        <div class="patient-actions">
                            <button class="btn-small btn-primary" onclick="startAppointment(1)">▶️ Iniciar</button>
                            <button class="btn-small btn-success" onclick="viewPatient(1)">👤 Ver Paciente</button>
                            <button class="btn-small btn-warning" onclick="rescheduleAppointment(1)">📅 Reagendar</button>
                            <button class="btn-small btn-danger" onclick="cancelAppointment(1)">❌ Cancelar</button>
                        </div>
                    </div>

                    <div class="patient-card">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <div class="patient-name">João Oliveira</div>
                                <div class="patient-info">
                                    ⏰ 09:00 - 09:30 | 📱 (11) 99999-5678<br>
                                    📋 Retorno pós-cirúrgico | 🆔 Paciente #002
                                </div>
                            </div>
                            <span class="status-badge status-em_andamento">Em Andamento</span>
                        </div>
                        <div class="patient-actions">
                            <button class="btn-small btn-success" onclick="finishAppointment(2)">✅ Finalizar</button>
                            <button class="btn-small btn-primary" onclick="addNotes(2)">📝 Anotações</button>
                            <button class="btn-small btn-warning" onclick="requestExam(2)">🔬 Solicitar Exame</button>
                        </div>
                    </div>

                    <div class="patient-card">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <div class="patient-name">Ana Costa</div>
                                <div class="patient-info">
                                    ⏰ 10:30 - 11:00 | 📱 (11) 99999-9012<br>
                                    📋 Primeira consulta | 🆔 Paciente #003
                                </div>
                            </div>
                            <span class="status-badge status-agendada">Agendada</span>
                        </div>
                        <div class="patient-actions">
                            <button class="btn-small btn-primary" onclick="confirmAppointment(3)">✅ Confirmar</button>
                            <button class="btn-small btn-success" onclick="viewPatient(3)">👤 Ver Paciente</button>
                            <button class="btn-small btn-warning" onclick="rescheduleAppointment(3)">📅 Reagendar</button>
                            <button class="btn-small btn-danger" onclick="cancelAppointment(3)">❌ Cancelar</button>
                        </div>
                    </div>

                    <!-- Tomorrow's Appointments -->
                    <h3
                        style="color: #2c3e50; margin: 40px 0 20px 0; border-left: 4px solid #27ae60; padding-left: 15px;">
                        📅 Amanhã - 1 de Julho, 2025
                    </h3>

                    <div class="patient-card">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <div class="patient-name">Carlos Ferreira</div>
                                <div class="patient-info">
                                    ⏰ 14:00 - 14:30 | 📱 (11) 99999-3456<br>
                                    📋 Consulta cardiológica | 🆔 Paciente #004
                                </div>
                            </div>
                            <span class="status-badge status-confirmada">Confirmada</span>
                        </div>
                        <div class="patient-actions">
                            <button class="btn-small btn-success" onclick="viewPatient(4)">👤 Ver Paciente</button>
                            <button class="btn-small btn-warning" onclick="rescheduleAppointment(4)">📅 Reagendar</button>
                            <button class="btn-small btn-danger" onclick="cancelAppointment(4)">❌ Cancelar</button>
                        </div>
                    </div>

                    <div class="patient-card">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <div class="patient-name">Lucia Mendes</div>
                                <div class="patient-info">
                                    ⏰ 15:30 - 16:00 | 📱 (11) 99999-7890<br>
                                    📋 Acompanhamento diabetes | 🆔 Paciente #005
                                </div>
                            </div>
                            <span class="status-badge status-agendada">Agendada</span>
                        </div>
                        <div class="patient-actions">
                            <button class="btn-small btn-primary" onclick="confirmAppointment(5)">✅ Confirmar</button>
                            <button class="btn-small btn-success" onclick="viewPatient(5)">👤 Ver Paciente</button>
                            <button class="btn-small btn-warning" onclick="rescheduleAppointment(5)">📅 Reagendar</button>
                        </div>
                    </div>
                </div>

                <!-- Calendar View (Hidden by default) -->
                <div id="calendarView" style="display: none;">
                    <div class="calendar-container">
                        <div class="calendar-header">
                            <button onclick="previousMonth()"
                                style="background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer;">‹</button>
                            <h2 id="currentMonth">Junho 2025</h2>
                            <button onclick="nextMonth()"
                                style="background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer;">›</button>
                        </div>
                        <div class="calendar-grid">
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Dom</div>
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Seg</div>
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Ter</div>
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Qua</div>
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Qui</div>
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Sex</div>
                            <div class="calendar-day" style="font-weight: bold; background: #ecf0f1;">Sáb</div>

                            <!-- Calendar days with appointments -->
                            <div class="calendar-day">29</div>
                            <div class="calendar-day today has-appointment">
                                30
                                <div class="appointment-item">08:00 Maria S.</div>
                                <div class="appointment-item">09:00 João O.</div>
                                <div class="appointment-item">10:30 Ana C.</div>
                            </div>
                            <div class="calendar-day has-appointment">
                                1
                                <div class="appointment-item">14:00 Carlos F.</div>
                                <div class="appointment-item">15:30 Lucia M.</div>
                            </div>
                            <div class="calendar-day">2</div>
                            <div class="calendar-day has-appointment">
                                3
                                <div class="appointment-item">16:00 Pedro S.</div>
                            </div>
                            <div class="calendar-day">4</div>
                            <div class="calendar-day">5</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- New Appointment Modal -->
    <div id="newAppointmentModal" class="modal">
        <div class="modal-content">
            <h2 style="margin-bottom: 20px; color: #2c3e50;">📅 Nova Consulta</h2>

            <form id="newAppointmentForm">
                <div class="form-group">
                    <label for="patientSelect">Paciente *</label>
                    <select id="patientSelect" required>
                        <option value="">Selecione um paciente...</option>
                        <option value="1">Maria Santos Silva</option>
                        <option value="2">João Oliveira</option>
                        <option value="3">Ana Costa</option>
                        <option value="4">Carlos Ferreira</option>
                        <option value="5">Lucia Mendes</option>
                    </select>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="appointmentDate">Data *</label>
                        <input type="date" id="appointmentDate" required>
                    </div>

                    <div class="form-group">
                        <label for="appointmentTime">Horário *</label>
                        <input type="time" id="appointmentTime" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="appointmentType">Tipo de Consulta *</label>
                    <select id="appointmentType" required>
                        <option value="">Selecione...</option>
                        <option value="primeira">Primeira Consulta</option>
                        <option value="retorno">Retorno</option>
                        <option value="rotina">Consulta de Rotina</option>
                        <option value="urgencia">Urgência</option>
                        <option value="pos_cirurgico">Pós-cirúrgico</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="appointmentNotes">Observações</label>
                    <textarea id="appointmentNotes" rows="3" placeholder="Observações sobre a consulta..."></textarea>
                </div>

                <div style="display: flex; gap: 15px; margin-top: 20px;">
                    <button type="button" class="btn btn-secondary" onclick="closeNewAppointmentModal()">Cancelar</button>
                    <button type="submit" class="btn">Agendar Consulta</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // CORREÇÃO: JavaScript inline adicionado para todas as funcionalidades

        // Funções para o modal de consulta
        function openNewAppointmentModal() {
            document.getElementById('newAppointmentModal').style.display = 'block';
        }
        
        function closeNewAppointmentModal() {
            document.getElementById('newAppointmentModal').style.display = 'none';
        }
        
        function showCalendarView() {
            document.getElementById('appointmentsList').style.display = 'none';
            document.getElementById('calendarView').style.display = 'block';
            // Mostrar botão para voltar à lista
            var showListBtn = document.getElementById('showListBtn');
            if (showListBtn) showListBtn.style.display = 'inline-block';
            // Esconder o botão de calendário
            var calendarBtn = document.querySelector('.btn-secondary[onclick="showCalendarView()"]');
            if (calendarBtn) calendarBtn.style.display = 'none';
        }
        
        function showListView() {
            document.getElementById('appointmentsList').style.display = 'block';
            document.getElementById('calendarView').style.display = 'none';
            // Esconder botão de voltar
            var showListBtn = document.getElementById('showListBtn');
            if (showListBtn) showListBtn.style.display = 'none';
            // Mostrar botão de calendário
            var calendarBtn = document.querySelector('.btn-secondary[onclick="showCalendarView()"]');
            if (calendarBtn) calendarBtn.style.display = 'inline-block';
        }
        
        // Funções placeholder para ações das consultas
        function startAppointment(id) { 
            showNotification('Iniciando consulta #' + id, 'info');
        }
        
        function finishAppointment(id) { 
            showNotification('Finalizando consulta #' + id, 'success');
        }
        
        function viewPatient(id) { 
            window.location.href = 'patients.php';
        }
        
        function addNotes(id) { 
            var notes = prompt('Adicione anotações para a consulta #' + id + ':');
            if (notes) {
                showNotification('Anotações salvas com sucesso!', 'success');
            }
        }
        
        function requestExam(id) { 
            window.location.href = 'exams.php';
        }
        
        function confirmAppointment(id) { 
            showNotification('Consulta #' + id + ' confirmada!', 'success');
        }
        
        function rescheduleAppointment(id) { 
            var newDate = prompt('Digite a nova data para a consulta #' + id + ' (DD/MM/AAAA):');
            if (newDate) {
                showNotification('Consulta #' + id + ' reagendada para ' + newDate, 'success');
            }
        }
        
        function cancelAppointment(id) { 
            if (confirm('Tem certeza que deseja cancelar a consulta #' + id + '?')) {
                showNotification('Consulta #' + id + ' cancelada!', 'warning');
            }
        }
        
        function previousMonth() { 
            showNotification('Mês anterior', 'info');
        }
        
        function nextMonth() { 
            showNotification('Próximo mês', 'info');
        }
        
        // Função de notificação melhorada
        function showNotification(message, type) {
            type = type || 'info';
            alert(message);
        }
        
        // Filtros
        document.addEventListener('DOMContentLoaded', function() {
            var filterDate = document.getElementById('filterDate');
            var filterStatus = document.getElementById('filterStatus');
            
            if (filterDate) {
                filterDate.addEventListener('change', function(e) {
                    showNotification('Filtrando por data: ' + e.target.value, 'info');
                });
            }
            
            if (filterStatus) {
                filterStatus.addEventListener('change', function(e) {
                    showNotification('Filtrando por status: ' + e.target.options[e.target.selectedIndex].text, 'info');
                });
            }
            
            // Form submit
            var form = document.getElementById('newAppointmentForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    var patient = document.getElementById('patientSelect').options[document.getElementById('patientSelect').selectedIndex]?.text;
                    var date = document.getElementById('appointmentDate').value;
                    var time = document.getElementById('appointmentTime').value;
                    
                    if (patient && date && time) {
                        showNotification('Consulta agendada para ' + patient + ' em ' + date + ' às ' + time, 'success');
                        closeNewAppointmentModal();
                        form.reset();
                    } else {
                        showNotification('Por favor, preencha todos os campos obrigatórios.', 'error');
                    }
                });
            }
            
            // Fechar modal ao clicar fora
            var modal = document.getElementById('newAppointmentModal');
            if (modal) {
                window.onclick = function(event) {
                    if (event.target === modal) {
                        closeNewAppointmentModal();
                    }
                };
            }
            
            // Destacar menu ativo
            var currentPage = window.location.pathname.split('/').pop();
            document.querySelectorAll('.sidebar-menu a').forEach(function(link) {
                var href = link.getAttribute('href');
                if (href === currentPage) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>