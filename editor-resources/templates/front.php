<?php include "header.php"; ?>
<body id="startview">
<div class="container">

    <div id="nojs" class="alert"><b>WARNING</b> -
        Sorry, if you have installed this from a full release, you really need JavaScript enabled and
        DOM support in your browser to use this editor.<br/><br/>
        If you have downloaded this from GitHub's sources, you will need to make sure that you have followed
        the <a href="https://github.com/howardjones/network-weathermap#using-the-dev-version">Using The Dev Version</a>
        instructions as well.  Until you do, vital JavaScript files will be missing that also cause this message.
    </div>

    <div id="withjs">
        <div id="dlgStart" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="dlgTitlebar modal-header"><h3>
                            Welcome to the Weathermap <?php echo $WEATHERMAP_VERSION ?> editor</h3>
                    </div>
                    <div class="modal-body">

                        <h2>Create A New Map</h2>

                        <form method="GET" class="form-inline">
                            <div class="row">

                                <div class="col-xs-5">
                                    <label>named</label>
                                    <span class="input-group"><input type="text" class="form-control"
                                                                     placeholder="filename" name="mapname"
                                                                     size="20"><span
                                                class="input-group-addon"> .conf</span>
                                    </span>
                                </div>

                                <input type="submit" class="btn btn-success" value="Create">
                                <input name="action" type="hidden" value="newmap">
                                <input name="plug" type="hidden" value="<?php echo $fromplug ?>">

                                <div class="col-xs-4">
                                    <input type="checkbox" name="template" value="copy"> <label>copied from</label>
                                    <select
                                            name="sourcemap">
                                        <?php foreach ($titles as $file => $title): ?>
                                            <option value="<?php echo $file ?>"><?php echo $file ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                            </div>
                        </form>

                        <hr/>

                        <h2>or Open an existing map</h2>

                        <div id="existinglist">
                            <table class="table table-striped table-bordered filelist">
                                <?php foreach ($titles as $file => $title) : ?>
                                    <tr>
                                        <td><?php echo $notes[$file] ?></td>
                                        <td><a href="?mapname=<?php echo $file ?>&action=nothing&plug=<?php
                                            echo $fromplug ?>"><?php echo $file ?></a></td>
                                        <td><span class="comment"><?php echo $title ?></span></td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <small>PHP Weathermap <?php echo $WEATHERMAP_VERSION ?>
                            Copyright &copy; 2005-2016 Howard Jones - howie@thingy.com
                            <br/>The current version should always be
                            <a href="http://www.network-weathermap.com/">available here</a>,
                            along with other related software. PHP Weathermap is licensed under the MIT License, see
                            LICENSE file for more information.
                            This distribution also includes other open source software listed in
                            the README file.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body></html>
