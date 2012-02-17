<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008 Alexandru Szasz <alexxed@gmail.com>
     * http://code.google.com/p/narro/
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
     * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
     * later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
     * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
     * more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the
     * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
     */

?>
    <br />
    <br />
    </div>
<?php
    if (NarroApp::$Database[1]->EnableProfiling)
        NarroApp::$Database[1]->OutputProfiling();
?>
<?php
    /**
     * Yes, you are free to remove this footer
     */
?>
    <p align="center" style="font-size:small"><a target="_blank" href="http://code.google.com/p/narro/wiki/About"><?php echo sprintf(t('%s, version %s'), 'Narro', NARRO_VERSION) ?></a></p>
    </body>
</html>