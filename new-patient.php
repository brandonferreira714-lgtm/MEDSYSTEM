<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Paciente - Sistema Médico</title>
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
                <li><a href="new-patient.php" class="active">➕ Novo Paciente</a></li>
                <li><a href="appointments.php">📅 Consultas</a></li>
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
                <h1 class="page-title">Novo Paciente</h1>
                <div class="user-info">
                    <span>Dr. João Silva</span>
                    <div class="user-avatar">JS</div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="content-area">
                <form id="newPatientForm">
                    <!-- Dados Pessoais -->
                    <h2
                        style="color: #2c3e50; margin-bottom: 20px; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                        👤 Dados Pessoais
                    </h2>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="fullName">Nome Completo *</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF *</label>
                            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                        </div>

                        <div class="form-group">
                            <label for="birthDate">Data de Nascimento *</label>
                            <input type="date" id="birthDate" name="birthDate" required>
                        </div>

                        <div class="form-group">
                            <label for="gender">Sexo *</label>
                            <select id="gender" name="gender" required>
                                <option value="">Selecione...</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="maritalStatus">Estado Civil</label>
                            <select id="maritalStatus" name="maritalStatus">
                                <option value="">Selecione...</option>
                                <option value="solteiro">Solteiro(a)</option>
                                <option value="casado">Casado(a)</option>
                                <option value="divorciado">Divorciado(a)</option>
                                <option value="viuvo">Viúvo(a)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="profession">Profissão</label>
                            <input type="text" id="profession" name="profession">
                        </div>
                    </div>

                    <!-- Contato -->
                    <h2
                        style="color: #2c3e50; margin: 30px 0 20px 0; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                        📞 Contato
                    </h2>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="phone">Telefone *</label>
                            <input type="tel" id="phone" name="phone" placeholder="(00) 00000-0000" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="emergencyContact">Contato de Emergência</label>
                            <input type="tel" id="emergencyContact" name="emergencyContact"
                                placeholder="(00) 00000-0000">
                        </div>

                        <div class="form-group">
                            <label for="emergencyName">Nome do Contato de Emergência</label>
                            <input type="text" id="emergencyName" name="emergencyName">
                        </div>
                    </div>

                    <!-- Endereço -->
                    <h2
                        style="color: #2c3e50; margin: 30px 0 20px 0; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                        🏠 Endereço
                    </h2>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" placeholder="00000-000">
                        </div>

                        <div class="form-group">
                            <label for="street">Rua</label>
                            <input type="text" id="street" name="street">
                        </div>

                        <div class="form-group">
                            <label for="number">Número</label>
                            <input type="text" id="number" name="number">
                        </div>

                        <div class="form-group">
                            <label for="complement">Complemento</label>
                            <input type="text" id="complement" name="complement">
                        </div>

                        <div class="form-group">
                            <label for="neighborhood">Bairro</label>
                            <input type="text" id="neighborhood" name="neighborhood">
                        </div>

                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input type="text" id="city" name="city">
                        </div>

                        <div class="form-group">
                            <label for="state">Estado</label>
                            <select id="state" name="state">
                                <option value="">Selecione...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>

                    <!-- Informações Médicas -->
                    <h2
                        style="color: #2c3e50; margin: 30px 0 20px 0; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                        🏥 Informações Médicas
                    </h2>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="bloodType">Tipo Sanguíneo</label>
                            <select id="bloodType" name="bloodType">
                                <option value="">Selecione...</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="height">Altura (cm)</label>
                            <input type="number" id="height" name="height" placeholder="170" step="1">
                        </div>

                        <div class="form-group">
                            <label for="weight">Peso (kg)</label>
                            <input type="number" id="weight" name="weight" placeholder="70.5" step="0.1">
                        </div>

                        <div class="form-group">
                            <label for="healthPlan">Plano de Saúde</label>
                            <input type="text" id="healthPlan" name="healthPlan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="allergies">Alergias</label>
                        <textarea id="allergies" name="allergies" rows="3"
                            placeholder="Descreva alergias conhecidas..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="medications">Medicamentos em Uso</label>
                        <textarea id="medications" name="medications" rows="3"
                            placeholder="Liste medicamentos atuais..."></textarea>
                    </div>

                    <!-- Botões de Ação -->
                    <div style="display: flex; gap: 15px; margin-top: 30px; justify-content: flex-end;">
                        <button type="button" class="btn btn-secondary" onclick="clearForm()">
                            🔄 Limpar Formulário
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='patients.php'">
                            ❌ Cancelar
                        </button>
                        <button type="submit" class="btn">
                            💾 Salvar Paciente
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // CORREÇÃO: JavaScript inline adicionado para todas as funcionalidades

        // Função para limpar o formulário
        function clearForm() {
            if (confirm('Tem certeza que deseja limpar todos os campos do formulário?')) {
                document.getElementById('newPatientForm').reset();
                showNotification('Formulário limpo com sucesso!', 'success');
            }
        }
        
        // Função de notificação
        function showNotification(message, type) {
            type = type || 'info';
            alert(message);
        }
        
        // Função para calcular idade automaticamente
        function calculateAge(birthDate) {
            var today = new Date();
            var birth = new Date(birthDate);
            var age = today.getFullYear() - birth.getFullYear();
            var monthDiff = today.getMonth() - birth.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birth.getDate())) {
                age--;
            }
            return age;
        }
        
        // Função para validar campos obrigatórios
        function validateForm() {
            var requiredFields = ['fullName', 'cpf', 'birthDate', 'gender', 'phone'];
            var isValid = true;
            
            for (var i = 0; i < requiredFields.length; i++) {
                var field = document.getElementById(requiredFields[i]);
                if (!field.value.trim()) {
                    showNotification('Por favor, preencha o campo ' + field.previousElementSibling.innerText.replace(' *', ''), 'error');
                    field.focus();
                    isValid = false;
                    break;
                }
            }
            
            return isValid;
        }
        
        // Submissão do formulário
        document.getElementById('newPatientForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!validateForm()) {
                return;
            }
            
            var patientName = document.getElementById('fullName').value;
            var birthDate = document.getElementById('birthDate').value;
            var age = calculateAge(birthDate);
            
            showNotification('Paciente ' + patientName + ' cadastrado com sucesso!\nIdade: ' + age + ' anos', 'success');
            
            // Perguntar se deseja cadastrar outro paciente
            if (confirm('Paciente cadastrado com sucesso!\n\nDeseja cadastrar outro paciente?')) {
                clearForm();
                document.getElementById('fullName').focus();
            } else {
                window.location.href = 'patients.php';
            }
        });
        
        // Auto-format CPF
        document.getElementById('cpf')?.addEventListener('input', function(e) {
            var value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                e.target.value = value;
            }
        });
        
        // Validar CPF
        function validateCPF(cpf) {
            cpf = cpf.replace(/\D/g, '');
            if (cpf.length !== 11) return false;
            
            // Verificar dígitos repetidos
            if (/^(\d)\1{10}$/.test(cpf)) return false;
            
            // Validar primeiro dígito verificador
            var sum = 0;
            for (var i = 0; i < 9; i++) {
                sum += parseInt(cpf.charAt(i)) * (10 - i);
            }
            var digit = 11 - (sum % 11);
            if (digit >= 10) digit = 0;
            if (digit !== parseInt(cpf.charAt(9))) return false;
            
            // Validar segundo dígito verificador
            sum = 0;
            for (var i = 0; i < 10; i++) {
                sum += parseInt(cpf.charAt(i)) * (11 - i);
            }
            digit = 11 - (sum % 11);
            if (digit >= 10) digit = 0;
            if (digit !== parseInt(cpf.charAt(10))) return false;
            
            return true;
        }
        
        document.getElementById('cpf')?.addEventListener('blur', function(e) {
            var cpf = e.target.value;
            if (cpf && !validateCPF(cpf)) {
                showNotification('CPF inválido! Por favor, verifique o número digitado.', 'error');
                e.target.focus();
            }
        });
        
        // Auto-format Phone
        document.getElementById('phone')?.addEventListener('input', function(e) {
            var value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                if (value.length <= 2) {
                    value = value.replace(/^(\d{0,2})/, '($1');
                } else if (value.length <= 7) {
                    value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
                } else {
                    value = value.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
                }
                e.target.value = value;
            }
        });
        
        // Auto-format Emergency Contact
        document.getElementById('emergencyContact')?.addEventListener('input', function(e) {
            var value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                if (value.length <= 2) {
                    value = value.replace(/^(\d{0,2})/, '($1');
                } else if (value.length <= 7) {
                    value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
                } else {
                    value = value.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
                }
                e.target.value = value;
            }
        });
        
        // Auto-format CEP
        document.getElementById('cep')?.addEventListener('input', function(e) {
            var value = e.target.value.replace(/\D/g, '');
            if (value.length <= 8) {
                value = value.replace(/^(\d{5})(\d)/, '$1-$2');
                e.target.value = value;
            }
        });
        
        // Busca automática de endereço por CEP (placeholder - integração com ViaCEP)
        document.getElementById('cep')?.addEventListener('blur', function() {
            var cep = this.value.replace(/\D/g, '');
            if (cep.length === 8) {
                // Simulação de busca de CEP
                showNotification('Integração com ViaCEP seria implementada aqui.\nCEP: ' + cep, 'info');
                
                // Código real para ViaCEP (comentado)
                /*
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.erro) {
                            document.getElementById('street').value = data.logradouro || '';
                            document.getElementById('neighborhood').value = data.bairro || '';
                            document.getElementById('city').value = data.localidade || '';
                            document.getElementById('state').value = data.uf || '';
                        } else {
                            showNotification('CEP não encontrado!', 'error');
                        }
                    })
                    .catch(error => {
                        showNotification('Erro ao buscar CEP', 'error');
                    });
                */
            }
        });
        
        // Calcular idade automaticamente ao digitar data de nascimento
        document.getElementById('birthDate')?.addEventListener('change', function(e) {
            if (e.target.value) {
                var age = calculateAge(e.target.value);
                if (age >= 0) {
                    // Opcional: mostrar idade em algum lugar
                    console.log('Idade calculada: ' + age + ' anos');
                }
            }
        });
        
        // Máscara para altura
        document.getElementById('height')?.addEventListener('input', function(e) {
            var value = e.target.value.replace(/\D/g, '');
            if (value) {
                var height = parseInt(value);
                if (height > 250) {
                    showNotification('Altura muito alta! Verifique o valor.', 'warning');
                }
            }
        });
        
        // Máscara para peso
        document.getElementById('weight')?.addEventListener('input', function(e) {
            var value = parseFloat(e.target.value);
            if (value && value > 300) {
                showNotification('Peso muito alto! Verifique o valor.', 'warning');
            }
        });
        
        // Destacar menu ativo
        document.addEventListener('DOMContentLoaded', function() {
            var currentPage = window.location.pathname.split('/').pop();
            document.querySelectorAll('.sidebar-menu a').forEach(function(link) {
                var href = link.getAttribute('href');
                if (href === currentPage) {
                    link.classList.add('active');
                }
            });
            
            // Focar no primeiro campo
            document.getElementById('fullName')?.focus();
        });
    </script>
</body>

</html>