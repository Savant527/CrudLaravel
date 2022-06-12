
                        <div class="row">
                        <div class="col m-1">

                        <div class="col m-1">
                            <div class="row">
                                
                            <label class="subtitulos">Tipo de Documento</label>
                                
                            </div>
                            <div class="row">
                            <select name="tipodoc" value="{{ isset($registros->tipodoc)?$registros->tipodoc:'' }}" id="color" class="form_input campos" required>
                                <option disabled selected value>Seleccione...</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CC">Cédula de Ciudadania</option>
                                <option value="CE">Cédula de Extranjería</option>
                            </select>
                                
                            </div>

                        </div>
                        </div>
                        <div class="row">

                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">No. Documento</label>
                            
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->documento)?$registros->documento:'' }}" maxlength="10" name="documento" size="10">
                           
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row">
                            <label class="subtitulos">Nombres</label>
                            
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->nombres)?$registros->nombres:'' }}" maxlength="50" name="nombres" size="20">
                            
                            </div>

                        </div>
                        </div>
                        
                        <div class="row">

                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Primer Apellido</label>
                           
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->apellido1)?$registros->apellido1:'' }}" maxlength="50" name="apellido1" size="20">
                            
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row">
                            <label class="subtitulos">Segundo Apellido</label>
                       
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->apellido2)?$registros->apellido2:'' }}" maxlength="50" name="apellido2" size="20">
                            
                            </div>

                        </div>
                        </div>
                        <div class="row">
                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Fecha de Nacimiento</label>
                            
                            </div>
                            <div class="row">
                            <input class="campos" type="date" value="{{ isset($registros->fecha_nacimiento)?$registros->fecha_nacimiento:'' }}" maxlength="2" name="fecha_nacimiento" size="10">
                           
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row">
                            <label class="subtitulos">Ciudad</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->ciudad)?$registros->ciudad:'' }}" maxlength="30" name="ciudad" size="10">
                            </div>

                        </div>
                        </div>
                        <div class="row">

                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Sexo</label>
                            </div>
                            <div class="row">
                            <select name="sexo" value="{{ isset($registros->sexo)?$registros->sexo:'' }}" id="sexo" class="form_input campos" required>
                                <option disabled selected value>Seleccione...</option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row">
                            <label class="subtitulos">Teléfono</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="number" value="{{ isset($registros->telefono)?$registros->telefono:'' }}" maxlength="10" name="telefono" size="15">
                            </div>

                        </div>
                        </div>

                        <div class="row">
                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Dirección</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->direccion)?$registros->direccion:'' }}" maxlength="40" name="direccion" size="20">
                            
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row">
                            <label class="subtitulos">EPS</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->eps)?$registros->eps:'' }}" maxlength="20" size="15" name="eps">
                            </div>

                        </div>
                        </div>
                        <div class="row">
                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Rh</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->rh)?$registros->rh:'' }}" maxlength="3" name="rh" size="10">
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row">
                            <label class="subtitulos">Correo</label>
                            </div>
                            <div class="row">
                            <input class="campos" required type="email" value="{{ isset($registros->correo)?$registros->correo:'' }}" name="correo" size="20">
                            </div>

                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Contraseña</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->contrasena)?$registros->contrasena:'' }}" maxlength="10" name="contrasena" size="10">
                            </div>
                        </div>

                        <div class="col m-1">
                            <div class="row"> 
                            <label class="subtitulos">Rama</label>
                            </div>
                            <div class="row">
                            <input class="campos" type="text" value="{{ isset($registros->rama)?$registros->rama:'' }}" maxlength="50" name="rama" size="10">
                            </div>
                        </div>
                        </div>

                            <div class="row">  
                            <div class="col m-1">
                                <center>
                                     <a class="btn btn-secondary" href="{{ url('/usuarios') }}">Regresar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                        </div></div>
                      