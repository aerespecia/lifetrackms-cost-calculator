<?php

class Constants {
    const DATE_FORMAT = "Y-m-d";
    const DATE_INTERVAL = "1 month";
    const MONTH_DATE_FORMAT = "M Y";

    const HOURS_IN_MONTH = 720;
    const RAM_COST_PER_HOUR_PER_GB = 0.00553;
    const STORAGE_COST_PER_MONTH_PER_GB = 0.10;

    /**
     * 1000 studies use 500MB RAM.
     * Divide 500MB by 1000 to get MB usage per study = 0.5
     * Divide 0.5MB by 1024MB(1GB) to get RAM per GB per study
     * 
     */
    const GB_RAM_PER_STUDY = 0.00048828125;

    /**
     * 1 study use 10 MB of storage.
     * Divide 10MB by 1024MB(1GB) to get STORAGE per GB per study
     */
    CONST GB_STORAGE_PER_STUDY = 0.009765625;
}

?>