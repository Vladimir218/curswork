
</section>
<form action="" method="get">
    <div class="panel-heading">
        <div class="box-header">
            <legend><h3 class="box-title">Карточка регистрации входящих писем</h3></legend>

        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Исходящий номер организации</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Номер</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>

                                    <input type="text" class="form-control" name="OrgOutNum" placeholder="" required>
                                </div>
                            </div>

                            <label class="col-md-2 control-label">Дата</label>
                            <div class="col-md-10">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="OrgOutDate" placeholder="" required>
                                </div>

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Входящий номер МТС</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Номер</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>

                                    <input type="text" class="form-control" name="InNum" placeholder="" required>
                                </div>
                            </div>

                            <label class="col-md-2 control-label">Дата</label>
                            <div class="col-md-10">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="Indate" placeholder="" required>
                                </div>

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ответ на запрос МТС</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Номер</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>

                                    <input type="text" class="form-control" name="OutNum" placeholder="">
                                </div>
                            </div>

                            <label class="col-md-2 control-label">Дата</label>
                            <div class="col-md-10">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="Outdate" placeholder="">
                                </div>

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>

        </div>

        <div class="form-group">

            <label class="col-md-2 control-label">Организация</label>

            <div class="col-md-10">
                <div class="input-group">
                    <div class="input-group-addon">
                    </div>

                    <div class="form-group">
                        <input list="Organisation" class="form-control" name="Organization" type="search" name="searc" required>
                        <datalist id="Organisation">
                            <option value="Organisation1" >
                            <option value="Organisation2" >
                            <option value="Organisation3" >
                            <option value="Organisation4" >
                        </datalist>
                    </div>
                </div>
            </div>

            <label class="col-md-2 control-label">Тема письма</label>
            <div class="col-md-10">

                <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <textarea rows="2" class="form-control" name="" required></textarea>
                </div>

            </div>

            <label class="col-md-2 control-label">Сканированный образ письма</label>
            <div class="col-md-10">

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class=""></i>
                    </div>
                    <input type="file" class="form-control" placeholder="" required>
                </div>

            </div>
        </div><!-- /.form group -->


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Поручение</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                                    <!-- checkbox -->
                            <div class="col-sm-3">

                                <div>
                                    <input type="checkbox" id="Id1" name="information" value="information">
                                    <label for="Id1">Для информации</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Id2" name="look" value="look">
                                    <label for="Id2">Для рассмотрения</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Id3" name="propouse" value="propouse">
                                    <label for="Id3">Для предложений</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Id4" name="answer" value="answer">
                                    <label for="Id4">Для подготовки ответа</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label >На контроле ГД</label>
                                    <div>
                                        <input type="radio" id="contactChoice1"
                                               name="contact" value="yes">
                                        <label for="contactChoice1">Да</label>

                                        <input type="radio" id="contactChoice2"
                                               name="contact" value="no" checked="checked">
                                        <label for="contactChoice2">Нет</label>
                                    </div>
                                <div class="navbar">
                                    <label class="col-md-5 control-label">Срок ответа</label>
                                    <div class="col-md-7">

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-5">
                                <label class="col-sm-3 control-label">Поручение</label>
                                <div class="col-sm-9">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                        </div>
                                        <textarea rows="4" class="form-control" name=""></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Исполнитель</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Подразделение</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>

                                    <div class="form-group">
                                        <input list="Organisation" class="form-control" type="search" name="searc" required>
                                        <datalist id="Organisation">
                                            <option value="Organisation1" >
                                            <option value="Organisation2" >
                                            <option value="Organisation3" >
                                            <option value="Organisation4" >
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.form group -->
                        <div class="form-group">

                            <label class="col-md-2 control-label">Исполнитель</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>

                                    <div class="form-group">
                                        <input list="Organisation" class="form-control" type="search" name="searc" required>
                                        <datalist id="Organisation">
                                            <option value="Organisation1" >
                                            <option value="Organisation2" >
                                            <option value="Organisation3" >
                                            <option value="Organisation4" >
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.form group -->
                        <div class="form-group">

                            <label class="col-md-2 control-label">Непосредственный исполнитель</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>

                                    <div class="form-group">
                                        <input list="Organisation" class="form-control" type="search" name="searc">
                                        <datalist id="Organisation">
                                            <option value="Organisation1" >
                                            <option value="Organisation2" >
                                            <option value="Organisation3" >
                                            <option value="Organisation4" >
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.form group -->

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-8">
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-6">
                        <div class="navbar">
                            <input type="submit" value="Регистрация">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="navbar">
                            <input type="reset" value ="Очистить форму">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>







