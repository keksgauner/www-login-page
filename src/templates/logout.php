<?php

setcookie("jwt", "removal", 1, "/");
header("Location: /login");
