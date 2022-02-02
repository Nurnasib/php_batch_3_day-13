<?php
namespace App\classes;
class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    public function __construct($data=null)
    {
        $this->startingNumber = $data['start_num'];
        $this->endingNumber = $data['end_num'];
        if (isset($data['odd-even']))
        {
            $this->oddEven      = $data['odd_even'];
        }
    }

    public function index()
    {
        header('Location: pages/index.php');
    }
    public function makeSeries()
    {
        if ($this->startingNumber > $this->endingNumber)
        {
            return $this->bigToSmallSeries();
        }
        else
        {
            if ($this->oddEven == 'odd')
            {
                return $this->smallToBigOddSeries();
            }
            elseif ($this->oddEven == 'even')
            {
                return $this->smallToBigEvenSeries();
            }
            else
            {
                return $this->smallToBigSeries();
            }
        }
    }
    protected function smallToBigOddSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i%2 != 0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }
    protected function smallToBigEvenSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i%2 == 0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }


    protected function smallToBigSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries()
    {
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }

}