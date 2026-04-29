<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes - MedSystem</title>
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
                <li><a href="dashboard.php">📊 Visão Geral</a></li>
                <li><a href="patients.php" class="active">👥 Pacientes</a></li>
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
                <h1 class="page-title">Pacientes</h1>
                <div class="user-info">
                    <div class="user-avatar">DR</div>
                    <span>Dr. João Silva</span>
                </div>
            </div>

            <div class="content-area">
                <!-- SEARCH BAR -->
                <div style="margin-bottom: 30px; display: flex; gap: 15px; align-items: center;">
                    <input type="text" placeholder="🔍 Buscar paciente por nome, CPF ou telefone..."
                        style="flex: 1; max-width: 400px;">
                    <button class="btn-small btn-primary">Buscar</button>
                    <button class="btn-small btn-success" onclick="window.location.href='new-patient.php'">➕ Novo
                        Paciente</button>
                </div>

                <!-- PATIENTS LIST -->
                <div class="patient-card">
                    <div class="patient-name">Maria Santos Silva</div>
                    <div class="patient-info">
                        📞 (11) 99999-9999 • 📧 <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a474b58434b6a4f474b434604494547">[email&#160;protected]</a><br>
                        🎂 45 anos • 🆔 CPF: 123.456.789-00<br>
                        📍 Rua das Flores, 123 - São Paulo, SP<br>
                        🩺 Última consulta: 20/06/2025
                    </div>
                    <div class="patient-actions">
                        <button class="btn-small btn-success">Nova Consulta</button>
                        <button class="btn-small btn-warning">Editar</button>
                        <button class="btn-small btn-primary">Receita</button>
                    </div>
                </div>

                <div class="patient-card">
                    <div class="patient-name">José Oliveira Costa</div>
                    <div class="patient-info">
                        📞 (11) 88888-8888 • 📧 <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99f3f6eafcd9fcf4f8f0f5b7faf6f4">[email&#160;protected]</a><br>
                        🎂 62 anos • 🆔 CPF: 987.654.321-00<br>
                        📍 Av. Paulista, 456 - São Paulo, SP<br>
                        🩺 Última consulta: 15/06/2025
                    </div>
                    <div class="patient-actions">
                        <button class="btn-small btn-success">Nova Consulta</button>
                        <button class="btn-small btn-warning">Editar</button>
                        <button class="btn-small btn-primary">Receita</button>
                    </div>
                </div>

                <div class="patient-card">
                    <div class="patient-name">Ana Costa Pereira</div>
                    <div class="patient-info">
                        📞 (11) 77777-7777 • 📧 <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="75141b14351018141c195b161a18">[email&#160;protected]</a><br>
                        🎂 28 anos • 🆔 CPF: 456.789.123-00<br>
                        📍 Rua da Consolação, 789 - São Paulo, SP<br>
                        🩺 Última consulta: 10/06/2025
                    </div>
                    <div class="patient-actions">
                        <button class="btn-small btn-success">Nova Consulta</button>
                        <button class="btn-small btn-warning">Editar</button>
                        <button class="btn-small btn-primary">Receita</button>
                    </div>
                </div>

                <div class="patient-card">
                    <div class="patient-name">Roberto Ferreira Lima</div>
                    <div class="patient-info">
                        📞 (11) 66666-6666 • 📧 <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="11637e737463657e51747c70787d3f727e7c">[email&#160;protected]</a><br>
                        🎂 52 anos • 🆔 CPF: 321.654.987-00<br>
                        📍 Rua Augusta, 321 - São Paulo, SP<br>
                        🩺 Última consulta: 05/06/2025
                    </div>
                    <div class="patient-actions">
                        <button class="btn-small btn-success">Nova Consulta</button>
                        <button class="btn-small btn-warning">Editar</button>
                        <button class="btn-small btn-primary">Receita</button>
                    </div>
                </div>

                <div class="patient-card">
                    <div class="