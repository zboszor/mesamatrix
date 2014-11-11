<?php
/*
 * Copyright (C) 2014 Romain "Creak" Failliot.
 *
 * This file is part of mesamatrix.
 *
 * mesamatrix is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * mesamatrix is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with mesamatrix. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Mesamatrix\Parser;

class Constants
{
    // List of all the drivers.
    public static $allDrivers = array(
        "swrast",
        "softpipe",
        "llvmpipe",
        "i965",
        "nv50",
        "nvc0",
        "r300",
        "r600",
        "radeonsi"
    );

    public static $allDriversVendors = array(
        "Software"  => array("swrast", "softpipe", "llvmpipe"),
        "Intel"     => array("i965"),
        "nVidia"    => array("nv50", "nvc0"),
        "AMD"       => array("r300", "r600", "radeonsi"),
    );
}
