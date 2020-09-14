function mostrar_dados()
            {
                var meuFormulario = document.forms["formulario"];
                
                
                document.getElementById("campos").innerHTML = "Dados Fornecidos";
                document.getElementById("mostrar_nome").innerHTML = "Nome: " + meuFormulario["primeironome"].value;
                
                var radios = meuFormulario["sexo"];
                if(radios[0].checked)
                {
                    document.getElementById("mostrar_sexo").innerHTML = "Sexo: Masculino";
                } else
                {
                    if(radios[1].checked)
                    {
                        document.getElementById("mostrar_sexo").innerHTML = "Sexo: Feminino";
                    } else
                    {
                        if(radios[2].checked)
                        {
                            document.getElementById("mostrar_sexo").innerHTML = "Sexo: Outros";
                        } else
                        {
                             document.getElementById("mostrar_sexo").innerHTML = "Sexo: Não Definido";
                        }
                    }
                    
                }
                
                
                
                var selection = meuFormulario["estadocivil"];
                document.getElementById("mostrar_estadoCivil").innerHTML = "Estado Civil: " + selection[selection.selectedIndex].value;
		
                
                var financiados = meuFormulario["financiados"];
                var bens = "Bens Financiados: ";
                for (var i=0; i < financiados.length; i++)
                {
                        if (financiados[i].checked)
                        {
                                bens += financiados[i].value + " ";
                        }
                }
                document.getElementById("mostrar_financiados").innerHTML = bens;
                
                return false;
            }

