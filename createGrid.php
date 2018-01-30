<?php
    
    function createGrid($fullsize_dir, $thumbs_dir,$h_size)
    {
        
        $thumbs  = scandir($thumbs_dir); //directorios vienen de createthumbs.php
            
            array_shift($thumbs); //elimina el directorio del array
            array_shift($thumbs); //elimina el directorio del array
        
        
        
        $totalpics = count($thumbs);
        
        $i=0;
        		
        while ($i < $totalpics) 
        
        {
			
			echo "<div class='row'>";
            
            
            
            for ($x=1; $x <= (12/$h_size); $x++)
            {

                $pic=current($thumbs);
				
				if ($pic == NULL) {
					break;
				}
                
                    
                $img="{$thumbs_dir}{$pic}";

                $alt_name=substr($pic, 3 , -4); //remueve file extension del nombre para mostrar.


                list ($width_orig, $height_orig) = getimagesize($img);

                if ($height_orig > $width_orig)
                {


                    echo "
                      <div class='col-md-{$h_size} nopadding'>
                        <div class='thumbnail'>
                            <img class='img-responsive portrait-img' src='{$img}' title='{{$alt_name}'>
                            <div class='overlay'>
                                <a class='captiontext' href='{$fullsize_dir}{$pic}' data-lightbox='Portfolio' data-title='{$alt_name}'>{$alt_name}</a>
                            </div>
                             
                        </div>
                    </div>
                ";

                }
                else
                {   
                    echo "
                      <div class='col-md-{$h_size} nopadding'>
                        <div class='thumbnail'>
                            <img class='img-responsive landscape-img' src='{$img}' title='{$alt_name}'>
                            <div class='overlay'>
                                <a class='captiontext' href='{$fullsize_dir}{$pic}' data-lightbox='Portfolio' data-title='{$alt_name}'>{$alt_name}</a>
                            </div>
                             
                        </div>
                    </div>
                ";

                }
                 
            	if ($i >= $totalpics)
					{
						break;
					}  
				
            	next($thumbs);
                
            }
			
		$i=$i+ (12 / $h_size);
        echo "</div>";
        }
    }
?>