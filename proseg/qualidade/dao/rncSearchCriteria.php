<?php
/**
 * Search criteria for {@link TodoDao}.
 * <p>
 * Can be easily extended without changing the {@link TodoDao} API.
 */
final class rncSearchCriteria {

    private $status = null;


    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return rncSearchCriteria
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

}

?>
