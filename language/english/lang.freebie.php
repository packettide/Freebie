<?php

$lang = array(
  'to_ignore' => '<h4>Freebie segments:</h4>
                  <p style="font-weight: normal">
                    EE will act as if these segments aren&rsquo;t in the URI at all.</p>
  
                      <div style="margin: 20px 0 0; border-top: 1px solid #ccc; font-weight: normal; font-style: italic">
                        <ul>
                          <li style="margin: 10px 0 10px">
                            success|error|preview
                          </li>
                          <li style="margin: 10px 0 10px">
                            success error preview
                          </li>
                          <li style="margin: 10px 0 10px">
                            success<br />error<br />preview
                          </li>
                          <li style="margin: 10px 0 10px">
                            inky*clyde <span style="font-style:italic">
                            (matches inkyblinkypinkyclyde)</em></span>
                          </li>
                        </ul>                        
                      </div>',
                      
  'ignore_beyond' => '<h4>Breaking segments:</h4>
                      <p style="font-weight: normal">
                        All segments AFTER one of these matches will be ignored.</p>
                      
                      <p style="font-weight: normal;">
                        Example: The URI about/<strong>map</strong>/virginia/arlington/22201,
                        will process as about/<strong>map</strong> if you set <strong>map</strong> 
                        as a breaking segment</p>',
                        
  'remove_numbers' => '<h4>Ignore numeric segments </h4>
                         <p style="font-weight: normal">
                         Examples: /2010/, /2/, /101/</p>'
);