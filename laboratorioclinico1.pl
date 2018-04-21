%tipos_tiroides
es_tipo_de(hipotiroidismo,tiroides).
es_tipo_de(hipertiroidismo,tiroides).


%sexo
tiene_edad(christian_bustamante, masculino, 1).
tiene_edad(kelen_lapo, femenino,23).
tiene_edad(victor_samaniego, masculino, 30).
tiene_edad(maritza_cuenca, femenino, 25).

%rango
rango_de(0_2, t3, 0.51, 3.96).
rango_de(3-5, t3, 0.65, 3.83).
rango_de(6-8, t3, 0.65, 3.48).
rango_de(9_12, t3, 0.63, 3.28).
rango_de(12, t3, 1.20, 2.60).

rango_de(0_2, t4, 3.52, 17.40).
rango_de(3_5, t4, 3.70, 15.70).
rango_de(6_8, t4, 4.02, 13.30).
rango_de(9_12, t4, 4.12, 12.10).
rango_de(12, t4, 4.50, 12.50).

rango_de(0_2, tsh, 0.36, 8.60).
rango_de(3_5, tsh, 0.33, 6.70).
rango_de(6_8, tsh, 0.34, 6.60).
rango_de(9_12, tsh, 0.35, 5.40).
rango_de(12, tsh , 0.39, 4.00).

%sintomas mujeres
sintomas_mujeres(hipotiroidismo,"Fatiga").
sintomas_mujeres(hipotiroidismo,"Agotamiento").
sintomas_mujeres(hipotiroidismo,"Depresion").
sintomas_mujeres(hipotiroidismo,"Dificultad para concentrarse").
sintomas_mujeres(hipotiroidismo,"Subida de peso sin explicacion").
sintomas_mujeres(hipotiroidismo,"Piel seca").
sintomas_mujeres(hipotiroidismo,"Calambres").
sintomas_mujeres(hipotiroidismo,"Perdida de cabello").
sintomas_mujeres(hipotiroidismo,"Extrenimiento").

sintomas_mujeres(hipertiroidismo,"Nerviosismo").
sintomas_mujeres(hipertiroidismo,"Aumento de transpiracion").
sintomas_mujeres(hipertiroidismo,"Debilidad").
sintomas_mujeres(hipertiroidismo,"Ataques de panico").
sintomas_mujeres(hipertiroidismo,"Insomnio").
sintomas_mujeres(hipertiroidismo,"Perdida de peso").
sintomas_mujeres(hipertiroidismo,"Presion arterial").
sintomas_mujeres(hipertiroidismo,"Menor cantidad de flujo").

%sintomashombres
sintomas_hom(hipotiroidismo,"Piel, unas y cabello quebradizo").
sintomas_hom(hipotiroidismo,"Disminucion en la sudoracion").
sintomas_hom(hipotiroidismo,"Perdida de apetito").
sintomas_hom(hipotiroidismo,"Aumento de Peso").
sintomas_hom(hipotiroidismo,"Cara y Parpados hinchados").
sintomas_hom(hipotiroidismo,"Bulbo en el cuello").
sintomas_hom(hipotiroidismo,"Disminucion de la actividad cardiaca").
sintomas_hom(hipotiroidismo,"Perdida de memoria").
sintomas_hom(hipotiroidismo,"Cambios de humor").

sintomas_hom(hipertiroidismo,"Perdida de peso").
sintomas_hom(hipertiroidismo,"Aumento de Apetito").
sintomas_hom(hipertiroidismo,"Sudoracion excesiva").
sintomas_hom(hipertiroidismo,"Diarrea").
sintomas_hom(hipertiroidismo,"Aumento de sensacion de sed").
sintomas_hom(hipertiroidismo,"Debilidad").
sintomas_hom(hipertiroidismo,"Vision_doble").
sintomas_hom(hipertiroidismo,"Ojos irritados").
sintomas_hom(hipertiroidismo,"Inflamacion de glandula tiroide").
sintomas_hom(hipertiroidismo,"Agrandamiento de las mamas").


hipotiroidismo(Rango, Ex, X):-rango_de(Rango, Ex, Min, _),X<Min,write("Hipotiroidismo").
hipertiroidismo(Rango, Ex, X):-rango_de(Rango, Ex, _, Max),X>Max,write("Hipertiroidismo").
pacientes:-tiene_edad(X,_,_),write(X),write(;).
sexo(N):-tiene_edad(N,X,_),write(X).
edad(N):-tiene_edad(N,_,X),write(X).
sintomasmujereshipo:-sintomas_mujeres(hipotiroidismo,X),write(X),write(;).
sintomashombreshipo:-sintomas_hom(hipotiroidismo,Y),write(Y),write(;).
sintomasmujereshiper:-sintomas_mujeres(hipertiroidismo,X),write(X),write(;).
sintomashombreshiper:-sintomas_hom(hipertiroidismo,Y),write(Y),write(;).
tiene_edad(sandra_cruz, femenino, 45).