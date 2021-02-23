<?php

vc_map([
  "name" => __("Tip", "dp"),
  "base" => "dp_tip",
  "class" => "",
  "category" => __("Content", "dp"),
  "params" => [
    [
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Headline", "dp"),
      "param_name" => "headline",
    ],
    [
      "type" => "textarea_html",
      "holder" => "hidden",
      "class" => "",
      "heading" => __("Content", "dp"),
      "param_name" => "content",
    ]
  ],
]);

class WPBakeryShortCode_DP_Tip extends WPBakeryShortCode {}
